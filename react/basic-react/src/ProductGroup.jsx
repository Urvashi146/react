import Product from "./product";
 function ProductGroup(){
   

        let option = ["Fast","Lonlasting","Affordable"]
        return <>
    <Product title="laptop 1"  price="100000" feature = {option}/>
    <Product title="laptop 2"  price="9000" feature = {option}/>
    <Product title="laptop 3"  price="50000" feature = {option}/>
    <Product title="laptop 4"  price="20000" feature = {option}/>
   
   </>
 
 

}
 export default ProductGroup;