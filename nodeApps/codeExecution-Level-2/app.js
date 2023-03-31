const express = require('express')
const app = express()

var auth = 0

app.post("/login",(req,res)=>{
    if(req.body.username == 'admin' & req.body.password == 'password'){
        auth = 1
    }
    res.send(auth);
})

