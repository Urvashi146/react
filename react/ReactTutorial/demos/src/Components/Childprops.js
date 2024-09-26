const ChildpropDemo = (props) => {
    return(<>
    
    <h3>Helloo {props.name}</h3>  
    {props.children}  
    {/* in class Component we use "this" keyword along with props => ex: this.props.name */}
    </>)
}
// However, props are immutable—a term from computer science meaning “unchangeable”.
export default ChildpropDemo