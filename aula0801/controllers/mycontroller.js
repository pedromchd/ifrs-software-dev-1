const { sequelize, Sequelize } = require ('../config/database')

const livrosModel = require('../models/livros')(sequelize,Sequelize)

exports.showForm = (req,res) => {
    res.render("myform", {layout: false});
}

exports.save = (req,res) => {
    const bookSetData = {
        title: req.body.title,
        description: req.body.description
    };

    livrosModel.create(bookSetData).then (data => {
        console.log('Data saved');
        res.redirect('/')
    }).catch(err => {
        console.log("Error" + err)
    })

}

exports.showResult = (req,res) => {

    livrosModel.findAll(
        {
            order: [['title','ASC']]

    }).then(results => {
        //console.log('results'+results.json)

        res.render("myresult", {resultado:results});

    }).catch(err => {
        console.log("Error" + err)
        res.status(500).send({message:"Error" + err.message})
    })
    
    


    
}

