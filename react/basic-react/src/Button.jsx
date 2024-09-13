
function reaction(){
    console.log("see this is onclick event magic")
}



function Button(){
    return (
        <>
        <button onClick={reaction}>Click me to see event effects.</button>
        </>)
}

export default Button;