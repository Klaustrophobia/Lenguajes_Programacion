package hn.unah.lenguajes.demo.controllers;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import hn.unah.lenguajes.demo.entities.Cliente;
import hn.unah.lenguajes.demo.services.Impl.ClienteServiceImpl;

@RestController
@RequestMapping("/api")
public class ClienteController {

    @Autowired
    private ClienteServiceImpl clienteServiceImpl;

    @PostMapping("/crear/cliente")
    public Cliente crearCliente(@RequestBody Cliente cliente) {
        return clienteServiceImpl.crearCliente(cliente);
    }
    

}
