import { useState } from 'react'
import Navbar from "./coponents/Navbar.jsx";
import HeroSection  from "./coponents/HeroSection.jsx";
import FeatureSection from "./coponents/FeatureSection.jsx";

function App() {
  const [count, setCount] = useState(0)

  return (
    <>
        <Navbar/>
        <div className="max-w-7xl mx-auto pt-20 px-6">
            <HeroSection/>
            <FeatureSection/>

        </div>

    </>
  )
}

export default App
