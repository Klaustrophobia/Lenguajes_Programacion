package hn.unah.lenguajes.ejercicio.demo.repositories;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import hn.unah.lenguajes.ejercicio.demo.entities.tipoVehiculo;

@Repository
public interface TipoVehiculoRepository extends CrudRepository <tipoVehiculo, Integer>{
    // HACER CIERTAS FUNCIONES QUE SE OCUPEN

}
