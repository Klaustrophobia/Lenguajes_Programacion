package hn.unah.lenguajes.ejercicio.demo.services.Impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes.ejercicio.demo.entities.Cliente;
import hn.unah.lenguajes.ejercicio.demo.repositories.ClienteRepository;
import hn.unah.lenguajes.ejercicio.demo.services.ClienteService;

@Service
public class ClienteServiceImpl implements ClienteService{
    @Autowired
    private ClienteRepository clienteRepository;

    @Override
    public Cliente addCliente(Cliente cliente) {
        return this.clienteRepository.save(cliente);
    }



}
