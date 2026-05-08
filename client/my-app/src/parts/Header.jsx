import { useState } from 'react';
import { Link } from 'react-router-dom';

function Header() {
    const [ isMenuOpen, setIsMenuOpen ] = useState( false );

    const toggleMenu = () => {
        setIsMenuOpen( !isMenuOpen );
    };

    return (
        <>
            <header className="header">
                <div className="header__inner">
                    <nav className="header__menu d-none d-lg-block">
                        <ul className="header__list">
                            <li className="header__item">
                                <Link to="/"
                                      className="header__link">Главная</Link>
                            </li>
                            <li className="header__item">
                                <Link to="/catalog"
                                      className="header__link">Каталог</Link>
                            </li>
                            <li className="header__item">
                                <Link to="/about" className="header__link">О
                                    нас</Link>
                            </li>
                            <li className="header__item">
                                <Link to="/contacts"
                                      className="header__link">Контакты</Link>
                            </li>
                        </ul>
                    </nav>

                    <Link to="/" className="header__logo">
                        <img src="./images/Logo.png" alt=""
                             className="header__logo-img"/>
                    </Link>

                    <a href="tel:73517770000"
                       className="header__phone d-none d-lg-block">+73517770000</a>

                    <div
                        onClick={ toggleMenu }
                        className={ `header__burger d-block d-lg-none ${
                            isMenuOpen ? 'flipped' : ''
                        }` }
                    >
                        <div className="header__burger-item"></div>
                        <div className="header__burger-item"></div>
                        <div className="header__burger-item"></div>
                    </div>
                </div>
            </header>

            <div className={ `mobile-menu ${ isMenuOpen ? 'opened' : '' }` }>
                <div className="mobile-menu__wrapper">
                    <div className="mobile-menu__inner mb-4">
                        <Link to="/"
                              className="mobile-menu__link mobile-menu__link_active mb-3">Главная</Link>
                        <Link to="/catalog"
                              className="mobile-menu__link mb-3">Каталог</Link>
                        <Link to="/about" className="mobile-menu__link mb-3">О
                            нас</Link>
                        <Link to="/contacts"
                              className="mobile-menu__link">Контакты</Link>
                    </div>

                    <a href="tel:73517770000"
                       className="mobile-menu-phone">+73517770000</a>
                </div>
            </div>
        </>
    );
}

export default Header;