package hn.unah.lenguajes.demo.controllers;

import org.springframework.web.bind.annotation.RestController;

import hn.unah.lenguajes.demo.entities.Comida;
import hn.unah.lenguajes.demo.services.Impl.ComidaServiceImpl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;

@RestController
@RequestMapping("/api")

public class ComidaController {
    
    @Autowired
    private ComidaServiceImpl comidaServiceImpl;

    // @PostMapping("/comida/crear")
    // public Comida crearComida(@RequestBody Comida comida) {        
    //     return comidaServiceImpl.crearComida(comida);
    // }
    
    @GetMapping("/comida/buscar")
    public Comida buscarComida(@RequestParam long idComida) {
        return comidaServiceImpl.buscarComida(idComida);
    }

    @DeleteMapping("/comida/eliminar")
    public Comida eliminarComida(@RequestParam long idComida) {
        return comidaServiceImpl.eliminarComida(idComida);
    }
}
