import React from "react";
import { Route, Routes } from "react-router-dom";
import About from "../pages/About";
import Index from "../pages/Index";
import Contacts from '../pages/Contacts.jsx';
import Catalog from '../pages/Catalog.jsx';
import Category from '../pages/Category.jsx';
import Product from '../pages/Product.jsx';
function AppRouter() {
    return (
        <Routes>
            <Route path="/contacts" element={<Contacts />} />
            <Route path="/about" element={<About />} />
            <Route path="/catalog" element={<Catalog />} />
            <Route path="/category/:slug" element={<Category />} />
            <Route path="/product/:id" element={<Product />} />
            <Route path="*" element={<Index/>} />
        </Routes>
    );
}

export default AppRouter;
