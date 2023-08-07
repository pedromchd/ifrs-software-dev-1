const express = require("express")
const router = express.Router()
var myController = require("../controllers/mycontroller")


router.get("/", myController.showForm)
router.post("/", myController.save)
router.get("/show", myController.showResult)

module.exports = router