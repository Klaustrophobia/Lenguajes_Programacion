package hn.unah.lenguajes.demo.repositories;

import org.springframework.data.repository.CrudRepository;

import hn.unah.lenguajes.demo.entities.Orden;

public interface OrdenRepository extends CrudRepository <Orden, Long>{

}