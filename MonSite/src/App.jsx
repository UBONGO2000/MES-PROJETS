import Navbar from "./coponents/Navbar.jsx";
import HeroSection  from "./coponents/HeroSection.jsx";
import FeatureSection from "./coponents/FeatureSection.jsx";
import Workflow from "./coponents/Workflow.jsx";
import Pricing from "./coponents/Pricing.jsx";
import Testimonials from "./coponents/Testimonials.jsx";
import Footer from "./coponents/Footer.jsx";

function App() {

  return (
    <>
        <Navbar/>
        <div className="max-w-7xl mx-auto pt-20 px-6">
            <HeroSection/>
            <FeatureSection/>
            <Workflow/>
            <Pricing/>
            <Testimonials/>
            <Footer/>

        </div>

    </>
  )
}

export default App
