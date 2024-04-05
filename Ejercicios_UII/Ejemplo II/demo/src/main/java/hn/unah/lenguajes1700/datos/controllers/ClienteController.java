package hn.unah.lenguajes1700.datos.controllers;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import hn.unah.lenguajes1700.datos.entities.Cliente;
import hn.unah.lenguajes1700.datos.services.Impl.ClienteServiceImpl;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.PathVariable;



@RestController
@RequestMapping("/api")
public class ClienteController {

    //Mandar a llamar a las Implementaciones de Servicios
    @Autowired
    private ClienteServiceImpl clienteServiceImpl;

    @PostMapping("/cliente/create")
    public Cliente addCliente(@RequestBody Cliente cliente) {
        return this.clienteServiceImpl.addCliente(cliente);
    }

    @GetMapping("/cliente/obtener")
    public List<Cliente> GetClientes(){
        return this.clienteServiceImpl.GetClientes();
    }

    @PutMapping("/cliente/update/{id}")
    public Cliente updateCliente(@PathVariable String id, @RequestBody Cliente cliente) {
        return this.clienteServiceImpl.updateCliente(id, cliente);
    }

    @GetMapping("/cliente/obtener")
    public Optional <Cliente> getClienteDNI(@RequestParam String dni){
        return this.clienteServiceImpl.getClienteDNI(dni);
    }

    @DeleteMapping("/cliente/delete")
    public String eliminarCliente(@RequestParam String dni){
        return this.clienteServiceImpl.eliminarCliente(dni);
    }

}
