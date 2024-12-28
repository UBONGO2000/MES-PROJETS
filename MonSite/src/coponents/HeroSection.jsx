import video1 from "../assets/video1.mp4"
import video2 from "../assets/video2.mp4"

function HeroSection() {
    return (
        <div className="flex flex-col items-center mt-6 lg:mt-20">
            <h1 className="text-4xl sm:text-6xl lg:text-7xl text-center tracking-wide">
                VirtualG build tools
                <span className="bg-gradient-to-r from-blue-500 to-blue-800 text-transparent bg-clip-text"> for developers</span>
            </h1>

            <p className="mt-10 text-lg text-center text-neutral-500 max-w-4xl">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A corporis deleniti dolores ea eligendi eum explicabo, fuga illum laborum, magnam necessitatibus nisi, praesentium velit vitae.
            </p>

            <div className="flex justify-center my-10">
                <a href="#" className="bg-gradient-to-r from-blue-500 to-blue-800 py-3 px-4 mx-3 rounded-md hover:opacity-50"> Start for free</a>

            </div>

            <div className="flex mt-10 justify-center">
                <video autoPlay loop muted className="rounded-lg w-1/2 border border-blue-700 shadow-blue-400 mx-2 my-4" src={video1}
                       type="video/mp4">
                    Your browser doesn't support video tag.
                </video>
                <video autoPlay loop muted className="rounded-lg w-1/2 border border-blue-700 shadow-blue-400 mx-2 my-4" src={video2}
                       type="video/mp4">
                    Your browser doesn't support video tag.
                </video>
            </div>
        </div>
    )
}

export default HeroSection;