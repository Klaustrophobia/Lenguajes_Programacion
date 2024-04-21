package hn.unah.lenguajes.demo.controllers;

import org.springframework.web.bind.annotation.RestController;

import hn.unah.lenguajes.demo.entities.Cliente;
import hn.unah.lenguajes.demo.services.Impl.ClienteServiceImpl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;



@RestController
@RequestMapping("/api")
public class LoginController {
    
    @Autowired
    private ClienteServiceImpl clienteServiceImpl;
    
    @GetMapping("/login")
    public Cliente buscarClientePoUsuario(@RequestParam String nombreusuario, @RequestParam String contraseniausuario) {
        return clienteServiceImpl.buscarClientePoUsuario(nombreusuario, contraseniausuario);
    }
}
