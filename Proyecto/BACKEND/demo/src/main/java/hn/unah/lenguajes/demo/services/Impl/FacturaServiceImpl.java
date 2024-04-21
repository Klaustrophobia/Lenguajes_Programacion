package hn.unah.lenguajes.demo.services.Impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes.demo.entities.Factura;
import hn.unah.lenguajes.demo.repositories.FacturaRepository;
import hn.unah.lenguajes.demo.services.FacturaService;

@Service
public class FacturaServiceImpl implements FacturaService{

    @Autowired
    private FacturaRepository facturaRepository;
    
    @Override
    public Factura crearFactura(Factura factura) {
        return facturaRepository.save(factura);
    }

}
