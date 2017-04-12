<?php

namespace InTimesIT\CalendarBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class EventType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $eventClass = $builder->getDataClass(); // get Event class name
        $statuses = constant($eventClass.'::STATUSES'); // get Statuses const array

        $builder
            ->add('title', TextType::class, [
                'label' => 'intimesit.calendar.event.title',
            ])
            ->add('start', DateTimeType::class, [
                'label' => 'intimesit.calendar.event.start',
            ])
            ->add('end', DateTimeType::class, [
                'label' => 'intimesit.calendar.event.end',
            ])
            ->add('allDay', CheckboxType::class, [
                'label' => 'intimesit.calendar.event.allDay',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'intimesit.calendar.event.description',
            ])
            ->add('location', TextType::class, [
                'label' => 'intimesit.calendar.event.location',
            ])
            ->add('status', ChoiceType::class, [
                'choices' => $statuses,
                'required' => true,
                'label' => 'intimesit.calendar.event.status',
            ])
            ->add('participants', CollectionType::class, [
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true,
                'label' => 'intimesit.calendar.event.participants',
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'intimesit_calendar_event';
    }
}
