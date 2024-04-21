package hn.unah.lenguajes.demo.services.Impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes.demo.entities.Ingrediente;
import hn.unah.lenguajes.demo.entities.Proveedor;
import hn.unah.lenguajes.demo.repositories.ProveedorRepository;
import hn.unah.lenguajes.demo.services.ProveedorService;

@Service
public class ProveedorServiceImpl implements ProveedorService{

    @Autowired
    private ProveedorRepository proveedorRepository;

    // @Autowired
    // private IngredienteRepository ingredienteRepository;

    @Override
    public Proveedor crearProveedor(Proveedor proveedor) {
        return proveedorRepository.save(proveedor);
    }

    @Override
    public Ingrediente asignarAInventario(long idproveedor, String idproducto) {
        
        return null;
    }

}
