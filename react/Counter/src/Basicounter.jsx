import { useState } from "react";

function Basicounter() {
    let [count, Setcount] = useState(1);

    function Count() {
        Setcount(count + 1);
    }

    let containerStyle = {
        display: "flex",
        flexDirection: "column",
        alignItems: "center",
        justifyContent: "center",
        height: "70vh",  // Reduced height
        backgroundColor: "#f9f9f9",
        fontFamily: "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif",
        textAlign: "center",
        padding: "20px",
        boxSizing: "border-box",
    };
    

    let headerStyle = {
        color: "#333",
        fontSize: "26px",
        fontWeight: "600",
        marginBottom: "15px",
        textShadow: "1px 1px 2px rgba(0, 0, 0, 0.2)",
    };

    let counterStyle = {
        color: "#e74c3c",
        border: "3px solid #3498db",
        padding: "15px 25px",
        borderRadius: "12px",
        fontSize: "24px",
        fontWeight: "bold",
        boxShadow: "0px 4px 10px rgba(0, 0, 0, 0.1)",
        marginBottom: "20px",
        transition: "border-color 0.4s, transform 0.2s",
    };

    let buttonStyle = {
        padding: "14px 28px",
        backgroundColor: "#3498db",
        color: "white",
        border: "none",
        borderRadius: "50px",
        cursor: "pointer",
        fontSize: "18px",
        fontWeight: "bold",
        boxShadow: "0px 4px 10px rgba(52, 152, 219, 0.3)",
        transition: "background-color 0.3s, transform 0.2s, box-shadow 0.2s",
    };

    let buttonHover = {
        backgroundColor: "#2980b9",
        boxShadow: "0px 6px 12px rgba(41, 128, 185, 0.5)",
        transform: "translateY(-3px)",
    };

    return (
        <div style={containerStyle}>
            <h2 style={headerStyle}>Click to increase the counter</h2>
            <h3 style={counterStyle}>Counter = {count}</h3>
            <button
                style={buttonStyle}
                onClick={Count}
                onMouseEnter={(e) => Object.assign(e.target.style, buttonHover)}
                onMouseLeave={(e) => Object.assign(e.target.style, buttonStyle)}
            >
                Click Me
            </button>
        </div>
    );
}

export default Basicounter;
