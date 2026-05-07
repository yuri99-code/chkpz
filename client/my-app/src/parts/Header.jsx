import { useState } from 'react';

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
                                <a href="#" className="header__link">Главная</a>
                            </li>
                            <li className="header__item">
                                <a href="#" className="header__link">Каталог</a>
                            </li>
                            <li className="header__item">
                                <a href="#" className="header__link">О нас</a>
                            </li>
                            <li className="header__item">
                                <a href="#"
                                   className="header__link">Контакты</a>
                            </li>
                        </ul>
                    </nav>

                    <a href="/" className="header__logo">
                        <img src="./images/Logo.png" alt=""
                             className="header__logo-img"/>
                    </a>

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

            <div className={`mobile-menu ${isMenuOpen ? 'opened' : ''}`}>
                <div className="mobile-menu__wrapper">
                    <div className="mobile-menu__inner mb-4">
                        <a href=""
                           className="mobile-menu__link mobile-menu__link_active mb-3">Главная</a>
                        <a href=""
                           className="mobile-menu__link mb-3">Каталог</a>
                        <a href="" className="mobile-menu__link mb-3">О нас</a>
                        <a href="" className="mobile-menu__link">Контакты</a>
                    </div>

                    <a href="tel:73517770000"
                       className="mobile-menu-phone">+73517770000</a>
                </div>
            </div>
        </>
    );
}

export default Header;