import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './css/global/global.css'
import Home from './pages/Home'
import MyGlobalStyles from './styles/GlobalStyles'


ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <MyGlobalStyles />
    <Home />
  </React.StrictMode>,
)

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <App />
  </StrictMode>,
)