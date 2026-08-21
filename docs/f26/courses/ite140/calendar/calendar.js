let monthYearMap = {};

async function loadCalendarHTML(semester='') {
  try {


      const response = await fetch("../calendar/calendar.html");
      const html = await response.text();
      document.getElementById('cal').innerHTML = html;

      monthYearMap = {};
      const monthYearRegex = /<!--\s*([A-Za-z]+)\s+(\d{4})\s*-->/g;
      let match;
      while ((match = monthYearRegex.exec(html)) !== null) {
          monthYearMap[match[1]] = parseInt(match[2], 10);
      }
  } catch (error) {
      console.error('Error loading HTML file:', error);
  }
}

function scrollToToday() {
  const today = new Date();
  const monthName = today.toLocaleString('en-US', { month: 'long' });
  if (monthYearMap[monthName] !== today.getFullYear()) {
      return;
  }
  const day = String(today.getDate()).padStart(2, '0');
  const todayElement = document.getElementById(monthName + day);
  if (todayElement) {
      todayElement.scrollIntoView({ block: 'center' });
  }
}

async function loadDayDescriptions(semester='') {
  try {
      const response = await fetch("../calendar/school_dates.json");
      const data = await response.json();
      data.forEach(dateEntry => {
          const dateElement = document.getElementById(dateEntry.date);
          if (dateElement) {
              if (!(dateEntry.day == "A" || dateEntry.day == "B")) {
                  dateElement.appendChild(document.createElement('br'));
              }
              dateElement.append(dateEntry.day);
          }
      });
  } catch (error) {
      console.error('Error loading day descriptions:', error);
  }
}

async function loadSessionTopics(sessionJsonUrl, dateJsonUrl) {
  console.log('starting load session topics');
  try {
      const [sessionData, dateData] = await Promise.all([
          fetch(sessionJsonUrl).then(response => response.json()),
          fetch(dateJsonUrl).then(response => response.json())
      ]);

      dateData.forEach(dateEntry => {
          const dateElement = document.getElementById(dateEntry.date);
          if (dateElement) {
              const sessionInfo = sessionData.find(session => session.session === dateEntry.session);
              if (sessionInfo) {
                  dateElement.classList.add(`unit${sessionInfo.unit}`);

                  // Create HTML elements
                  const day = document.createElement('p');
                  const br1 = document.createElement('br');
                  const a = document.createElement('a');
                  a.href = `../goals/session.php?num=${sessionInfo.session.replace(/ /g, "_").toLowerCase()}`;
                  a.textContent = `Session ${sessionInfo.session}`;

                  const br2 = document.createElement('br');
                  const p = document.createElement('p');
                  day.textContent = `${dateEntry.day}`;
                  p.className = 'topic';
                  p.textContent = sessionInfo.topic;

                  // Append the elements to dateElement
                  dateElement.appendChild(br1);
                  if (!Number.isNaN(Number(sessionInfo.session)) || sessionInfo.session == "HTML Pretest") {
                      dateElement.appendChild(a);
                  } else {
                      dateElement.append(sessionInfo.session);
                  }
                  dateElement.appendChild(br2);
                  dateElement.appendChild(p);
              }
          }
      });
  } catch (error) {
      console.error('Error fetching session or date data:', error);
  }
  console.log('done load session topics');
}

function addElement(parentElem, childTag, childText) {
  const childElem = document.createElement(childTag);
  const textNode = document.createTextNode(childText);
  childElem.appendChild(textNode);
  parentElem.appendChild(childElem);
}

function addChapterDays(dayNum) {
  const className = "unit" + dayNum.toString();
  const label = "Unit " + dayNum.toString();
  const chapterDays = document.getElementsByClassName(className);
  for (let i = 0; i < chapterDays.length; i++) {
      const s = document.createElement('span');
      s.textContent = label;
      chapterDays[i].appendChild(s);
  }
}

async function setUp(semester="") {
  console.log("setUp called");

  await loadCalendarHTML(semester);
  await loadDayDescriptions(semester);
  await loadSessionTopics("../goals/session_topics.json", "../goals/session_dates.json");

  // Small delay for sequential DOM updates
  await new Promise(resolve => setTimeout(resolve, 100));

  for (let i = 0; i < 12; i++) {
      addChapterDays(i);
  }

  await new Promise(resolve => setTimeout(resolve, 100));

  const examDays = document.getElementsByClassName("unitother_school");
  for (let i = 0; i < examDays.length; i++) {
      addElement(examDays[i], "span", "Other");
  }

  await new Promise(resolve => setTimeout(resolve, 100));

  const noSchoolDays = document.getElementsByClassName("unitother_noschool");
  for (let i = 0; i < noSchoolDays.length; i++) {
      addElement(noSchoolDays[i], "span", "No School");
  }

  scrollToToday();
}
