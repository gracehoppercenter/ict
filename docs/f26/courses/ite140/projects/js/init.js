
function md_to_html(file){
  fetch(file)
  //.then(res => response.)
  .then(response => {
    if (!response.ok) {
      // If the file is not found (status 404), throw an error
      throw new Error('File not found');
    }
    return response.text();
  })
  .then(mdContent => {
  showdown.setOption('tables','true');
  showdown.setOption('openLinksInNewWindow','true');
  var conv = new showdown.Converter();
  var md_html = conv.makeHtml(mdContent);
  document.getElementById('md_to_html').innerHTML = md_html;
  })
  .catch(error => {
    document.getElementById('md_to_html').innerHTML = 'Hi - you\'re faster than I am! I have not published this lesson plan yet. Please check back later!';
  });
}
