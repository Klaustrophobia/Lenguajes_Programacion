package hn.unah.lenguajes.demo.controllers;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import hn.unah.lenguajes.demo.entities.Orden;
import hn.unah.lenguajes.demo.services.Impl.OrdenServiceImpl;

@RestController
@RequestMapping("/api")
public class OrdenController {

    @Autowired
    private OrdenServiceImpl ordenServiceImpl;

    @PostMapping("/orden/crear")
    public Orden crearOrden(@RequestBody Orden orden) {

        return ordenServiceImpl.crearOrden(orden);
    }

    @GetMapping("/orden/buscarporcliente")
    public List<Orden> buscarPorCliente(@RequestParam long idcliente) {
        return ordenServiceImpl.buscarPorCliente(idcliente);
    }
    

}
