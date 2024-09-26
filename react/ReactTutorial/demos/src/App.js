import logo from './logo.svg';
import './App.css';
import Firstfun from "./Components/FunctionComponent"
import Welcome from "./Components/ClassComponent"
// import Withjsx from "./Components/WithandWihtoutjsx"
import Withoutjsx from "./Components/WithandWihtoutjsx"
import PropDemo from "./Components/Props"
import ChildpropDemo from "./Components/Childprops"


function App() {
  return (<div className="text-center text-decoration-underline border border-3 m-5 p-5">
  <Firstfun/>
  <Welcome/>
  {/* <Withjsx/> */}
  <Withoutjsx/>
  <div className="text-center text-decoration-underline border border-3 m-5 p-5">
    <PropDemo name="Urvashi"><p>This is from Childprops</p></PropDemo>
  <PropDemo name="Urvashi again using Props"/>
  <PropDemo name="another Urvashi "/></div>
  <div className="text-center text-decoration-underline border border-3 m-5 p-5">
    <ChildpropDemo name="Urvashi">
      <p>This is from Childprops</p>
      </ChildpropDemo>
  <ChildpropDemo name="Urvashi again using Props">
    <button>Childern Porps</button>
  </ChildpropDemo>
  <ChildpropDemo name="another Urvashi "/></div>
  </div>
 
  )
}

export default App;
