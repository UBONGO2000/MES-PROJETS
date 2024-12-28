import { useState } from 'react'
import Navbar from "./coponents/Navbar.jsx";
import HeroSection  from "./coponents/HeroSection.jsx";

function App() {
  const [count, setCount] = useState(0)

  return (
    <>
        <Navbar/>
        <div className="max-w-7xl mx-auto pt-20 px-6">
            <HeroSection/>
        </div>
    </>
  )
}

export default App
