package hn.unah.lenguajes1700.datos.services.Impl;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import hn.unah.lenguajes1700.datos.entities.Cliente;
import hn.unah.lenguajes1700.datos.repositories.ClienteRepository;
import hn.unah.lenguajes1700.datos.services.ClienteService;

@Service
public class ClienteServiceImpl implements ClienteService {

    @Autowired
    private ClienteRepository clienteRepository;

    @Override
    public List<Cliente> GetClientes() {
        return (List<Cliente>) this.clienteRepository.findAll();
    }

    @Override
    public Cliente addCliente(Cliente cliente) {
       return this.clienteRepository.save(cliente);
    }

    @Override
    public Optional<Cliente> getClienteDNI(String dni) {
       return this.clienteRepository.findById(dni);
    }
    @Override
    public Cliente updateCliente(String dni, Cliente cliente) {
        Cliente clienteUpdate = this.clienteRepository.findById(dni).get();

        if (null != clienteUpdate) {
            clienteUpdate.setCorreo(cliente.getCorreo());
            this.clienteRepository.save(clienteUpdate);
        }
        return clienteUpdate;
    }

    @Override
    public String eliminarCliente(String dni) {
       Cliente clienteEliminar = this.clienteRepository.findById(dni);
        if (null != clienteEliminar) {
            this.clienteRepository.delete(clienteEliminar);
            return "Cliente eliminado correctamente";
        }
        return "Cliente no existe";
    }

}
