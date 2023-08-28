import React from 'react';
import "./ItemComponent.css";

export default props => {
    return (

        <li>
            <div className='expense-item'>
                <div className='expense-item__description'>
                <h2>{props.name}</h2>
                <div className='expense-item__price'>${props.price}</div>
                </div>
            </div>
         </li>
    );
 
}