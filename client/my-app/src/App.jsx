import 'bootstrap/dist/css/bootstrap.min.css'
import './assets/scss/style.scss'
import AppRouter from './components/AppRouter.jsx';
import { BrowserRouter } from "react-router-dom";

function App() {
  return (
      <BrowserRouter>
          <AppRouter />
      </BrowserRouter>
  )
}

export default App
