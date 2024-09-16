// import { useState } from 'react'
import './App.css'
import Basicounter from "./Basicounter"
import Myinput from './Textcounter'
import NameAge from './NameAge'

function App() {
  let flexStyle = {
      display: "flex",
      justifyContent: "space-around",  // Adjusts horizontal spacing
      alignItems: "center",            // Ensures vertical alignment
      gap: "20px",                     // Space between the components
      padding: "10px"
  };

  let boxStyle = {
      width: "500px",                  // Set the same width for both components
      height: "300px",                 // Set the same height for both components
      border: "1px solid black",       // Optional: to visualize the box
      display: "flex",                 // Ensures child elements align properly within each component
      justifyContent: "space-between", // Adds space between the components
      alignItems: "center",
      padding: "10px",                 // Optional padding inside the box
      gap: "20px"                      // Adds space between Basicounter and Myinput
  };

  return (
      <>
          <div style={flexStyle}>
              <div style={boxStyle}>
                  <Basicounter />
                  <Myinput />
                  <NameAge/>
              </div>
          </div>
      </>
  );
}

export default App;


