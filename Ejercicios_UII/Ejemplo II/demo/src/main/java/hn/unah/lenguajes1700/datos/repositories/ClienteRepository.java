package hn.unah.lenguajes1700.datos.repositories;

import java.util.List;
import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import hn.unah.lenguajes1700.datos.entities.Cliente;

@Repository
public interface ClienteRepository extends CrudRepository<Cliente, String>{

    // Busca clientes por correo
    public List<Cliente> getbyEmail(String correo);
}
