import React from 'react';
import ItemComponent from './ItemComponent';
import "./ListItems.css";

export default props => {
    
        if (props.items.length === 0) {
            return <h2 className='expenses-list__fallback'>Found no expenses.</h2>;
          }
        
          return (
            <ul className='expenses-list'>
               <p>My List of Items</p>
               
              {props.items.map((expense) => (
                <ItemComponent
                  key={expense.id}
                  name={expense.name}
                  price={expense.price}
                />
              ))}
            </ul>
          );
     
}