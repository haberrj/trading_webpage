function processData(allText) {
    var allTextLines = allText.split(/\r\n|\n/);
    var headers = allTextLines[0].split(',');
    var lines = [];

    for (var i=1; i<allTextLines.length; i++) {
        var data = allTextLines[i].split(',');
        if (data.length == headers.length) {

            var tarr = [];
            for (var j=0; j<headers.length; j++) {
                tarr.push(headers[j]+":"+data[j]);
            }
            lines.push(tarr);
        }
    }
    // alert(lines);
}

// function handleFiles(files) {
//     // Check for the various File API support.
//     if (window.FileReader) {
//         // FileReader are supported.
//         getAsText(files[0]);
//     } else {
//         alert('FileReader are not supported in this browser.');
//     }
//   }

// function getAsText(fileToRead) {
//     var reader = new FileReader();
//     // Read file into memory as UTF-8      
//     reader.readAsText(fileToRead);
//     // Handle errors load
//     reader.onload = loadHandler;
//     reader.onerror = errorHandler;
// }

// function loadHandler(event) {
//     var csv = event.target.result;
//     processData(csv);
// }   

// function processData(csv) {
//     var allTextLines = csv.split(/\r\n|\n/);
//     var lines = [];
//     for (var i=0; i<allTextLines.length; i++) {
//         var data = allTextLines[i].split(';');
//             var tarr = [];
//             for (var j=0; j<data.length; j++) {
//                 tarr.push(data[j]);
//             }
//             lines.push(tarr);
//     }
//     console.log(lines);
// }

// function errorHandler(evt) {
//     if(evt.target.error.name == "NotReadableError") {
//         alert("Cannot read file !");
//     }
// }