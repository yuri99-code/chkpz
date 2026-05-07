import 'bootstrap/dist/css/bootstrap.min.css'
import './assets/scss/style.scss'
import Index from "./pages/Index.jsx";
import Header from './parts/Header.jsx';
import Footer from './parts/Footer.jsx';

function App() {
  return (
    <>
        <Header />
        <Index/>
        <Footer />
    </>
  )
}

export default App
