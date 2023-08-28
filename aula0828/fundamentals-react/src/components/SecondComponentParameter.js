import React from 'react';
import "./SecondComponentParameter.css";

export default (props) => {
    return (
        <div className="SecondComp">
            <p>Segundo componente com Parâmetros</p> 
            <p> Parâmetro index: {props.index}</p>
            <p> Parâmetro other: {props.other}</p>
        </div>
    );
}