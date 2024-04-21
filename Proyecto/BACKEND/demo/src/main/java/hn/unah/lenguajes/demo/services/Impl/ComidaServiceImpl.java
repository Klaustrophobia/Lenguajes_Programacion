package hn.unah.lenguajes.demo.services.Impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes.demo.entities.Comida;
import hn.unah.lenguajes.demo.entities.Ingrediente;
import hn.unah.lenguajes.demo.repositories.ComidaRepository;
import hn.unah.lenguajes.demo.repositories.IngredienteRepository;
import hn.unah.lenguajes.demo.services.ComidaService;

@Service
public class ComidaServiceImpl implements ComidaService{

    @Autowired
    private ComidaRepository comidaRepository;

    @Autowired
    private IngredienteRepository inventarioRepository;

    @Override
    public Comida crearComida(Comida comida) {
        return comidaRepository.save(comida);
    }

    @Override
    public Comida buscarComida(long idComida) {
        Comida comida = comidaRepository.findById(idComida).get();
        return comida;
    }

    @Override
    public Comida eliminarComida(long idComida) {
        return comidaRepository.findById(idComida).get();
    }

    @Override
    public Ingrediente asignarAInventario(long idproducto, long idComida) {
        if(comidaRepository.existsById(idComida) && inventarioRepository.existsById(idproducto)){

            //Averiguar A quien va qué
            return null;
        }        
        
        return null;
    }

}
