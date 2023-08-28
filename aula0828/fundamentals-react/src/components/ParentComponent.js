import React from 'react';
import "./ParentComponent.css";

export default props => {
    return (
        <div className='Parent'>
            <h4>Ex. de itens do children</h4>
            <div>
                {props.children}
            </div>
        </div>
    );
}