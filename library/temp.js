const fs = require("fs");

const content =
  '<div class="container">\n<h1 class="page-title">Page Title</h1>\n</div>';

fs.mkdirSync("test", { recursive: true }, err => {
  if (err) throw err;
});

fs.writeFileSync("test/temp.js", content, err => {
  if (err) throw err;
});
