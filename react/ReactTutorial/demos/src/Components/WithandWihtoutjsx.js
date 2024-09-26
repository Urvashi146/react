import React from "react";
// this is using jsx
const Withjsx = () => (
  <div>
    <h1>Hi, I am using JSX here.</h1>
  </div>
);

// this is without using jsx

const Withoutjsx = () => (
    // createElement(type, props, ...children)
     React.createElement('div',{id:'mydiv', className:'abc'}, React.createElement('h1',null,"Hi, I am not using JSX here."))
      );
  
export default Withoutjsx;


  