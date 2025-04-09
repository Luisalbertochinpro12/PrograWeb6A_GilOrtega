package com.example.todolistspring.service;

import com.example.todolistspring.models.Tarea;
import com.example.todolistspring.repository.TareaRepository;
import org.springframework.stereotype.Service;
import java.util.List;
import java.util.Optional;
import java.util.Map;

@Service
public class TareaService {
    private final TareaRepository tareaRepository;

    public TareaRepository(TareaRepository tareaRepository) {
        this.tareaRepository = tareaRepository;
    }



}
