import Footer from '../parts/Footer.jsx';
import Header from '../parts/Header.jsx';
import Form from '../components/Form.jsx';

function Contacts() {
    return (
        <>
            <Header/>

            <section>
                <div className="contacts">
                    <div className="contacts__top">
                        <h1 className="contacts__top-title">Контакты</h1>
                    </div>
                </div>
            </section>

            <Form withPhone/>
            <Footer/>
        </>
    );
}

export default Contacts;