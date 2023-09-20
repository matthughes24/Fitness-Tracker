const express = require('express');
const path = require('path');

const app = express()
const port = process.env.PORT || 3000;

app.use(express.json())

app.get('*', (req, res) => {
    res.sendFile(path.join(__dirname, '../docs/index.php'))
  })

app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})