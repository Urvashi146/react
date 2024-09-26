import logo from './logo.svg';
import './App.css';
import Firstfun from "./Components/FunctionComponent"
import Welcome from "./Components/ClassComponent"
// import Withjsx from "./Components/WithandWihtoutjsx"
import Withoutjsx from "./Components/WithandWihtoutjsx"
import PropDemo from "./Components/Props"


function App() {
  return (<div className="text-center text-decoration-underline border border-3 m-5 p-5">
  <Firstfun/>
  <Welcome/>
  {/* <Withjsx/> */}
  <Withoutjsx/>
  <div className="text-center text-decoration-underline border border-3 m-5 p-5"><PropDemo name="Urvashi"/>
  <PropDemo name="Urvashi again using Props"/>
  <PropDemo name="another Urvashi "/></div>
  </div>
 
  )
}

export default App;
