import "./Product.css"

function Product({title,price,feature}){
    // if(price >20000){
    // console.log(props);
    // let IsDiscount = price >20000 ? "you have discount of 10%" : " " //insead of using if else we can use this.
    let List = feature.map((features)=><li>{features}</li>)
    let bgcolor1 = {backgroundColor:price>20000 ?"pink":"skyblue"};
    let bgcolordiv = {backgroundColor:"lightgray"};
    return( <div className="Product" style={bgcolordiv} > 

        <h3 style={bgcolor1}> Product Title : {title}</h3>
        <h4>Product Price : {price}</h4>
        <h4>Product feature : {List}</h4>
        <h4>{price>20000 ? "you have discount of 10%" : " "}</h4>
        {/* <h4>{IsDiscount}</h4> */}
        {/* <h3>You have Discount of 10%</h3> */}
    </div>)
// }
// else
// {
//     let List = feature.map((features)=><li>{features}</li>)
//     return( <div className="Product"> 
//         <h3>Product Title : {title}</h3>
//         <h4>Product Price : {price}</h4>
//         <h4>Product feature : {List}</h4>
    
//     </div>) 
    
// }
}
export default Product