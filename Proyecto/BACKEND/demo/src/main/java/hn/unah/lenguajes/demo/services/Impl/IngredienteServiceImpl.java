package hn.unah.lenguajes.demo.services.Impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes.demo.entities.Ingrediente;
import hn.unah.lenguajes.demo.repositories.IngredienteRepository;
import hn.unah.lenguajes.demo.services.IngredienteService;

@Service
public class IngredienteServiceImpl implements IngredienteService {
   
    @Autowired
    private IngredienteRepository ingredienteRepository;

    @Override
    public Ingrediente crearInventario(Ingrediente inventario) {
       return ingredienteRepository.save(inventario);
    }

    @Override
    public Ingrediente buscarInventario(long idProducto) {
       return ingredienteRepository.findById(idProducto).get();
    }

}
