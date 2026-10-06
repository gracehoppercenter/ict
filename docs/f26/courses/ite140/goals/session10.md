## What we'll do in class


### Present Grade Calculator

Today is the day - I'm excited to see what you came up with!

### Google AppScript - API

We'll continue playing with AppScript - this time our JS (erm - gs?) code will connect to
the internet to download data. This will be our first experience with 
[Application Programming Interfaces](https://en.wikipedia.org/wiki/API), which
we'll use a lot this year!

The first API we'll look at is about earthquakes. For our first query against that API, click this link:
<https://earthquake.usgs.gov/fdsnws/event/1/query?format=csv>

...then we'll take a look at the parameters that are documented here: 
[USGS Earthquake API Documentation](https://earthquake.usgs.gov/fdsnws/event/1/#parameters)

We'll build a nice visualizer in Google Sheets based on this data.

We'll break this down into parts, but the full version of our AppScript is kind of long. I've 
copied the final version that I expect to get to below. We might not get all the 
way through this, and there's no shame in copy/pasting
if that works best for you.

## No Homework

You deserve a rest after that gradebook project. We'll continue with AppScript next week =)

<hr>

## Final AppScript Earthquake Code

```js
function findLocation(){
  const sheet = SpreadsheetApp.getActiveSheet();
  const placeName = sheet.getRange("A2").getValue();

  const geoResult = Maps.newGeocoder().geocode(placeName);
  if (geoResult.status !== "OK") {
    sheet.getRange("A3").setValue("Location not found");
    return;
  }
  const lat = geoResult.results[0].geometry.location.lat;
  const lng = geoResult.results[0].geometry.location.lng;

  sheet.getRange("A3").setValue(lat)
  sheet.getRange("A4").setValue(lng)
}

function clearResults() {
  const sheet = SpreadsheetApp.getActiveSheet();
  const lastRow = sheet.getMaxRows();
  const lastCol = sheet.getMaxColumns();
  sheet.getRange(10, 1, lastRow - 9, lastCol).clearContent();
  sheet.getRange("F2").clearContent();
}

function dateToISO(rawDate) {
  return Utilities.formatDate(rawDate, Session.getScriptTimeZone(), "yyyy-MM-dd");
}

function searchEarthquakes() {
  const sheet = SpreadsheetApp.getActiveSheet();
  
  clearResults()
  
  const radiusKm = sheet.getRange("B2").getValue();
  const startDate_raw = sheet.getRange("C2").getValue();
  const endDate_raw = sheet.getRange("D2").getValue();
  
  const startDate = dateToISO(startDate_raw)
  const endDate = dateToISO(endDate_raw)
  
  const minMagnitude = sheet.getRange("E2").getValue();
  const lat = sheet.getRange("A3").getValue();
  const lng = sheet.getRange("A4").getValue();

  const url = `https://earthquake.usgs.gov/fdsnws/event/1/query?format=csv&latitude=${lat}&longitude=${lng}&maxradiuskm=${radiusKm}&starttime=${startDate}&endtime=${endDate}&minmagnitude=${minMagnitude}`;
  const response = UrlFetchApp.fetch(url, { muteHttpExceptions: true });
  const statusCode = response.getResponseCode();

  if (statusCode !== 200) {
    const errorText = response.getContentText();
    sheet.getRange("F2").setValue(`Search failed (${statusCode}): Probably too many results`);
    Logger.log(errorText);
    return;
  }

  const rows = Utilities.parseCsv(response.getContentText());

  //start at row 10, col 1
  sheet.getRange(10, 1, rows.length, rows[0].length).setValues(rows);
}
```