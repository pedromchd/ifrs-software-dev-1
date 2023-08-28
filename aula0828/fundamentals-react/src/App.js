import './App.css';
import FirstComponent from './components/FirstComponent';
import ParentComponent from './components/ParentComponent';
import SecondComponentParameter from './components/SecondComponentParameter';
import ListItems from './components/List/ListItems';
import products from './data/products';

function App() {
  
  return (
    <div className="App">

            <FirstComponent />

            <p>Página Principal</p>

            <SecondComponentParameter index="2" other="algum"/>
            <SecondComponentParameter index="4" other="mais algum"/>

            <ParentComponent>
              <ul>
                <li>item 1</li>
                <li>item 2</li>
                <li>...</li>
              </ul>
            </ParentComponent>


            <ListItems items = {products}/>


     </div>
  );
}

export default App;
