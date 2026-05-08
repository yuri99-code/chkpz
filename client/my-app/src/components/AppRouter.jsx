import React from "react";
import { Route, Routes } from "react-router-dom";
import About from "../pages/About";
import Index from "../pages/Index";
function AppRouter() {
    return (
        <Routes>
            <Route path="/about" element={<About />} />
            <Route path="*" element={<Index/>} />
        </Routes>
    );
}

export default AppRouter;
