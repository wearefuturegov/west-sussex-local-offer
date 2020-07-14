const getPins = () => JSON.parse(window.localStorage.getItem("pins")) || []

export default () => {
    const button = document.querySelector("button[data-pinboard]")

    if(button){
        let id = parseInt(button.dataset.id)
        if(getPins().includes(id)) button.innerHTML = "Remove from saved"
        button.addEventListener("click", handleClick)
    }

    const handleClick = () => {
        const pins = getPins()
    
        console.log("PINS: ", pins)
    
        if(pins.includes(id)){
            let newPins = pins.filter(pin => pin !== id)
            window.localStorage.setItem("pins", JSON.stringify(newPins))
            button.innerHTML = "Add to saved"
            console.log("NEW PINS: ", newPins)
        } {
            pins.push(parseInt(id))
            window.localStorage.setItem("pins", JSON.stringify(pins))
            button.innerHTML = "Remove from saved"
            console.log("NEW PINS: ", pins)
        }
    }
}

