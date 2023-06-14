require('dotenv').config()
const express = require('express')
const app = express()
const cors = require('cors')
const connection = require('./db')


// Database connection
connection()

// Routes

// Middleware
app.use(cors())
app.use(express.json())

const port = process.env.PORT || 8080
app.listen(port, () => console.log(`Server is running on port ${port}`))