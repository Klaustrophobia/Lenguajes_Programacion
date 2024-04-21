package hn.unah.lenguajes.demo.services.Impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes.demo.entities.Orden;
import hn.unah.lenguajes.demo.repositories.OrdenRepository;
import hn.unah.lenguajes.demo.services.OrdenService;

@Service
public class OrdenServiceImpl implements OrdenService{

    @Autowired
    private OrdenRepository ordenRepository;

    @Override
    public Orden crearOrden(Orden orden) {
        return ordenRepository.save(orden); 
    }

    @SuppressWarnings("unchecked")
    @Override
    public List<Orden> buscarPorCliente(long idcliente) {
        return (List<Orden>) ordenRepository.findById(idcliente).get();
    }

}
