package hn.unah.lenguajes.demo.controllers;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import hn.unah.lenguajes.demo.entities.Factura;
import hn.unah.lenguajes.demo.services.Impl.FacturaServiceImpl;

@RestController
@RequestMapping("/api")
public class FacturaController {

    @Autowired
    private FacturaServiceImpl facturaServiceImpl;

    @PostMapping("/factura/crear")
    public Factura crearComida(@RequestBody Factura factura) {        
        return facturaServiceImpl.crearFactura(factura);
    }

}
